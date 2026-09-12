$(document).ready(function () {

    $("#btnAdd").click(function () {
        openCreate();
    });

});

// =====================
// CREATE
// =====================
function openCreate() {
    $.get("/teachers/create", function (html) {

        Swal.fire({
            title: "Create Teacher",
            html: html,
            showCancelButton: true,
            confirmButtonText: "Save",

            preConfirm: async () => {

                let data = {
                    name: $("#name").val(),
                    gender: $("#gender").val(),
                    phone: $("#phone").val(),
                    email: $("#email").val(),
                    address: $("#address").val(),
                };

                try {

                    await storeTeacher(data);

                    Swal.fire({
                        toast: true,
                        icon: "success",
                        title: "Saved",
                        timer: 1500,
                        showConfirmButton: false,
                    });

                    // Refresh table from Blade
                    setTimeout(() => {
                        location.reload();
                    }, 1500);

                    return false;

                } catch (error) {

                    Swal.showValidationMessage(
                        error.responseJSON?.message || "Save failed"
                    );

                    return false;
                }
            },
        });

    });
}


// =====================
// EDIT
// =====================
function openEdit(id) {

    $.get("/teachers/" + id + "/edit", function (html) {

        Swal.fire({
            title: "Edit Teacher",
            html: html,

            customClass: {
                popup: "edit-teacher-popup",
            },

            showCancelButton: true,
            confirmButtonText: "Update",

            preConfirm: async () => {

                let data = {
                    name: $("#edit_name").val(),
                    gender: $("#edit_gender").val(),
                    phone: $("#edit_phone").val(),
                    email: $("#edit_email").val(),
                    address: $("#edit_address").val(),
                };

                try {

                    await updateTeacher(id, data);

                    Swal.fire({
                        toast: true,
                        icon: "success",
                        title: "Updated",
                        timer: 1500,
                        showConfirmButton: false,
                    });

                    // Refresh table from Blade
                    setTimeout(() => {
                        location.reload();
                    }, 1500);

                    return false;

                } catch (error) {

                    Swal.showValidationMessage(
                        error.responseJSON?.message || "Update failed"
                    );

                    return false;
                }
            },
        });

    });
}


// =====================
// DELETE
// =====================
function removeTeacher(id) {

    Swal.fire({
        title: "Delete?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Delete",
        cancelButtonText: "Cancel"
    }).then((r) => {

        if (r.isConfirmed) {

            deleteTeacher(id).done(() => {

                Swal.fire({
                    toast: true,
                    icon: "success",
                    title: "Deleted",
                    timer: 1500,
                    showConfirmButton: false,
                });

                // Refresh table from Blade
                setTimeout(() => {
                    location.reload();
                }, 1500);

            });

        }

    });
}
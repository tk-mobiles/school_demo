$(document).ready(function () {
    $("#btnAdd").click(function () {
        openCreate();
    });
});

// =====================
// CREATE
// =====================
function openCreate() {
    $.get("/students/create", function (html) {
        Swal.fire({
            title: "Create Student",
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
                    await storeStudent(data);

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
                        error.responseJSON?.message || "Save failed",
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
    $.get("/students/" + id + "/edit", function (html) {
        Swal.fire({
            title: "Edit Student",
            html: html,

            customClass: {
                popup: "edit-student-popup",
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
                    await updateStudent(id, data);

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
                        error.responseJSON?.message || "Update failed",
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
function removeStudent(id, name) {
    Swal.fire({
        title: `តើអ្នកចង់លុបសិស្សឈ្មោះ "${name}" មែនទេ?`,
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Delete",
        cancelButtonText: "Cancel",
    }).then((r) => {
        if (r.isConfirmed) {
            deleteStudent(id).done(() => {
                Swal.fire({
                    toast: true,
                    icon: "success",
                    title: `សិស្សឈ្មោះ "${name}" ត្រូវបានលុប`,
                    timer: 1500,
                    showConfirmButton: false,
                });

                setTimeout(() => {
                    location.reload();
                }, 1500);
            });
        }
    });
}

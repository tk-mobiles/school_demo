function loadTeachers() {
    return $.get("/api/teachers");
}

function getTeacher(id) {
    return $.get("/api/teachers/" + id);
}

function storeTeacher(data) {
    return $.post("/api/teachers", data);
}

function updateTeacher(id, data) {
    return $.ajax({
        url: "/api/teachers/" + id,
        type: "POST",
        data: {
            _method: "PUT",
            ...data,
        },
    });
}

function deleteTeacher(id) {
    return $.ajax({
        url: "/api/teachers/" + id,
        type: "POST",
        data: {
            _method: "DELETE",
        },
    });
}

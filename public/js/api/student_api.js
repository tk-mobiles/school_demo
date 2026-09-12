function loadStudents() {
    return $.get("/api/students");
}

function getStudent(id) {
    return $.get("/api/students/" + id);
}

function storeStudent(data) {
    return $.post("/api/students", data);
}

function updateStudent(id, data) {
    return $.ajax({
        url: "/api/students/" + id,
        type: "POST",
        data: {
            _method: "PUT",
            ...data,
        },
    });
}

function deleteStudent(id) {
    return $.ajax({
        url: "/api/students/" + id,
        type: "POST",
        data: {
            _method: "DELETE",
        },
    });
}

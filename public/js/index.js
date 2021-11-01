"use strict"

const deleteStudent = () => {
    const btnDelete = document.querySelectorAll('table .btn-danger')
    const confirmDelete = document.querySelector('#confirm-delete-student')

    let selectedStudent = 1;
    const cbBtnDelete = function (e) {
        e.stopPropagation()
        selectedStudent = this.getAttribute('data-id');
        console.log(selectedStudent);

    }

    const deleteForce = function (e) {
        e.preventDefault();
        e.stopPropagation();
        const formElement = this.parentNode;
        formElement.action = "/Student/" + selectedStudent;
        console.log(formElement);
        formElement.submit();
    }

    btnDelete.forEach(element => {
        element.addEventListener('click', cbBtnDelete);
    });

    confirmDelete.addEventListener('click', deleteForce)
}



const app = () => {
    deleteStudent();
}

app();


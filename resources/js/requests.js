import axios from "axios";


axios.delete(`/dashboard/utilisateurs/${4}`);

async function deleteUser() {
    try {
        const response = await axios.delete(`/dashboard/utilisateurs/${4}`);
        if (response.status === 200) {
            const notif =
                "<div class='alert alert-success alert-dismissible d-flex align-items-center' role='alert'><div class='ml-2'>hello</div><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
            const notification = document.getElementById("notification").innerHTML(notif);
        }
    } catch (err) {
        console.log(err);
    }
}
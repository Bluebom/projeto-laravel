const { default: axios } = require("axios");

document.addEventListener("click", (e) => {
    et = e.target;
    if (et.getAttribute("deleteId")) {
        e.preventDefault();
        let id = et.getAttribute("deleteId");
        let row = et.parentElement.parentElement.parentElement;
        axios
            .post("http://localhost:8000/api/clientes/" + id, {
                _method: "DELETE",
            })
            .then((res) => {
                if (res.status == 200) {
                    row.style.visibility = "hidden";
                    setTimeout(() => {
                        row.style.display = "none";
                    }, 50);
                }
            })
            .catch((err) => {
                console.log(err);
            });
    }
});

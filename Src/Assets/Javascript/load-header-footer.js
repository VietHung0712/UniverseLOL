import { load } from "./function.js";

document.addEventListener("DOMContentLoaded", function () {
    load("#header", "./Templates/header.html");
    load("#footer", "./Templates/footer.html");
});
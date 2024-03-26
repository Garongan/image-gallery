function previewImg() {
    const image = document.querySelector("#image");
    const dummyImg = document.querySelector("#dummyImage");
    const imgPreview = document.querySelector(".img-preview");
    const imageName = document.querySelector("#name");

    imgPreview.style.display = "block";
    dummyImg.style.display = "none";

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
        imageName.value = image.files[0].name.split(".")[0];
    };
}

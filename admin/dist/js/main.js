//serial number
let serialNumber = 1; // Initialize the counter
const serialNumberElements = document.querySelectorAll('.serial-no');
serialNumberElements.forEach((element) => {
    element.textContent = serialNumber;
    serialNumber++;
});

//Sweet alert for delete
function confirmDelete(id, tb, tbc, returnpage) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "delete.php?delete=" + id + "&tb=" + tb + "&tbc=" + tbc + "&returnpage=" + returnpage;
        }
    });
}

//for active and inactive
function confirmAction(action, id, tb, tbc, tbc1, returnpage, extra) {
    var actionText = (action === "active") ? "Are you sure you want to set this to inactive?" : "Are you sure you want to set this to active?";
    Swal.fire({
        title: 'Confirmation',
        text: actionText,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, proceed!'
    }).then((result) => {
        if (result.isConfirmed) {
            if (action === "active") {
                window.location.href = "active.php?status=" + id + "&tb=" + tb + "&tbc=" + tbc + "&tbc1=" + tbc1 + "&returnpage=" + returnpage + "&extra=" + extra;
            } else {
                window.location.href = "inactive.php?status0=" + id + "&tb=" + tb + "&tbc=" + tbc + "&tbc1=" + tbc1 + "&returnpage=" + returnpage + "&extra=" + extra;
            }
        }
    });
    return false;
}

/* for banner id get */
function myfcn1(idx, heading, image) {
    document.getElementById("id11").value = idx;
    document.getElementById("descc1").value = heading;
    document.getElementById("image11").src = "upload/banner/" + image;
}

/* for service id get */
function myfcn2(idx, image2, service_nm1, price1) {
    document.getElementById("id2").value = idx;
    document.getElementById("image12").src = "upload/service/" + image2;
    document.getElementById("service_nm1").value = service_nm1;
    document.getElementById("price1").value = price1;
}

/* for adventure id get */
function myfcn3(idx, image3) {
    document.getElementById("id3").value = idx;
    document.getElementById("image12").src = "upload/adventure/" + image3;
}

/* for gallery id get */
function myfcn4(idx, image4, category_gallery) {
    document.getElementById("id4").value = idx;
    document.getElementById("image14").src = "upload/gallery/" + image4;
    document.getElementById("category_gallery").value = category_gallery;
}

/* for dining id get */
function myfcn5(idx, image5, dining_heading, dining_desc) {
    document.getElementById("id5").value = idx;
    document.getElementById("image15").src = "upload/dining/" + image5;
    document.getElementById("dining_heading").value = dining_heading;
    document.getElementById("dining_desc").value = dining_desc;
}

/* for about id get */
function myfcn6(idx, about_counter) {
    document.getElementById("id6").value = idx;
    document.getElementById("about_counter").value = about_counter;
}

/* for activities id get */
function myfcn7(idx, image16) {
    document.getElementById("id7").value = idx;
    document.getElementById("image16").src = "upload/activities/" + image16;
}

/* for user id get */
function myfcn8(idx, user_nm, pass_word1, phone_number, email_id) {
    document.getElementById("id8").value = idx;
    document.getElementById("user_nm").value = user_nm;
    document.getElementById("pass_word1").value = pass_word1;
    document.getElementById("phone_number").value = phone_number;
    document.getElementById("email_id").value = email_id;
}



const addForm = document.getElementById("add-user-form");

//Add New User ajax Request
addForm.addEventListener("submit", async (e) => {
  e.preventDefault();
  const formData = new FormData(addForm);
  formData.append("add", 1);

  if (addForm.checkValidity() === false) {
    e.preventDefault();
    e.stopPropagation();
    addForm.classList.add("was-validated");
    return false;
  } else {
    document.getElementById("add-user-btn").value = "Please wait...";

    const data = await fetch("action.php", {
      method: "POST",
      body: formData,
    });
    const response = await data.text();
    console.log(response);
  }
});

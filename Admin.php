<?php
    require("conn.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  padding: 0;
  margin: 0;
}

.whole {
  overflow: hidden;
  background-color: greenyellow;
  height: 200vh;
  position: relative;
}

.navBar {
    background-color: red;
  position: sticky;
  height: 60px;
  width: 100%;
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  top: 0;   
}

.left {
  width: 50%;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}
.left h1 {
  position: absolute;
  left: 100px;
}
.right {
  width: 50%;
}
.right ul {
  list-style: none;
  display: flex;
  justify-content: space-evenly;
  align-items: center;
}

.addProd {
  background-color: aqua;
  height: 100%;
  position: fixed;
  top: 0;
  right: -50%;
  width: 416px;
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
  box-sizing: border-box;
  padding: 20px;
  border-radius: 20px 0px 0px 20px;
  transition: 0.5s ease-in-out;
  z-index: 100;
  visibility: hidden;
}

.addProd .close {
  cursor: pointer;
  background-color: #00000074;
  width: 30px;
  height: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  top: 20px;
  right: 20px;
  border-radius: 100%;
}

    </style>
</head>
<body>
    

    <div class="whole">
        <div class="navBar">
            <div class="left">
                <h1>LOGO</h1>

            </div>
            <div class="right">
                <ul>
                    <li>HOME</li>
                    <li>ABOUT</li>
                    <li>CONTACTS</li>
                    <li><button id="addingProd">Add Product</button></li>
                </ul>
            </div>
        </div>
        <form class="addProd" id="addProdForm" action="admin.php" method="post">
            <div class="close" id="close"><h3>X</h3></div>
            <h1>Add Product</h1>
            <h3>Product Name: </h3>
            <input type="text" name="productName">
            <h3>Product type</h3>
            <select name="type" id="prodType">
                <option value="drinks">Drinks</option>
                <option value="meals">Meals</option>
                <option value="desert">Dessert</option>
            </select>
            <h3>Price</h3>
            <input type="text" name="price" id="price" placeholder="$">
            <h3>Description</h3>
            <input type="text">
            <div class="addBtn">
                <button name="submit" value="submit">SUBMIT</button>
                <button value="reset" name="reset">RESET</button>
            </div>
        </form>
        
        
        <h1>SOMETHING MEMA</h1>
        <input type="text">
    </div>
    <script>
        const exitAddProd = document.getElementById("close");
        const addProdForm = document.getElementById("addProdForm");
        const addingProd = document.getElementById("addingProd");

        exitAddProd.addEventListener("click",()=>{
            addProdForm.style.right = "-100%"   
            addProdForm.style.visibility = "hidden";
        })
        addingProd.addEventListener("click",()=>{
            addProdForm.style.right = "0";
            addProdForm.style.top = "0";
            addProdForm.style.visibility = "visible";
        })
    </script>
</body>
</html>
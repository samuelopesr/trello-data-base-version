
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        
    </main>
</body>
    <script>
         const overlay = document.createElement("div");
        overlay.style.position = "fixed";
        overlay.style.top = "0";
        overlay.style.left = "0";
        overlay.style.width = "100%";
        overlay.style.height = "100%";
        overlay.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
        document.body.appendChild(overlay);

        const alerta = document.createElement("div")
        alerta.style.position = "absolute"
        alerta.style.width = "300px"
        alerta.style.height = "200px"
        alerta.style.left = "50%"
        alerta.style.borderRadius = "2%"
        alerta.style.top = "50%"
        alerta.style.transform = "translate(-50%, -50%)"
        alerta.style.backgroundColor = "#026773"
        document.body.appendChild(alerta)

        const button = document.createElement("button")
        button.textContent = "X"
        button.style.float = "right"
        button.style.marginTop = "10px"
        button.style.marginRight = "10px"
        button.addEventListener("click", () =>{
            alerta.remove()
            overlay.remove()
        })
        alerta.appendChild(button)

        const texto = document.createElement("h1")
        texto.textContent = "Digite uma senha e email válidos!!!"
        texto.style.fontFamily = "Arial"
        texto.style.fontSize = "1.3em"
        texto.style.textAlign = "center"
        texto.style.paddingTop = "60px"
        texto.style.color = "white"
        texto.style.width = "300px"
        alerta.appendChild(texto)

        window.location.assign("index.html")
    </script>
</html>
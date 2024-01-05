function iniciar() {
    alert("Taboada");
    let n = prompt("Insira o número: ");
    n = parseInt(n);

    if (isNaN(n)) {
        console.log("Número inválido.");
    } else {
        for (let i = 1; i <= 10; i++) {
            let resultado = n * i;
            console.log(`${n} * ${i} = ${resultado}`);
        }
    }
}

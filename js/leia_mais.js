function leiaMais() {
    var maisTexto = document.getElementById("mais");
    var btnLeiaMais = document.getElementById("btnLeiaMais");
    var ponto = document.getElementById("ponto");


    if (ponto.style.display === "none") {
        ponto.style.display = "inline";
        maisTexto.style.display = "none";
        btnLeiaMais.innerHTML = "Ler Mais";

    } else {
        ponto.style.display = "none";
        maisTexto.style.display = "inline";
        btnLeiaMais.innerHTML = "Ler Menos";
    }
}
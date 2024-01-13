function menseki(r){
    return "半径"+ r + "cmの面積は" + 3.14*r*r + "です。" + "<br>";
}

document.write(menseki(5));
document.write(menseki(7));
document.write(menseki(s=10));


document.write("<br><br>")//改行用

function totalPrice(group, ad, ch) {
    return 500 * ad + 200 * ch + "円です。" + "<br>";
}

document.write(totalPrice("A", 2, 4));
document.write(totalPrice("B", 1, 5));
document.write(totalPrice("C", 3, 7));
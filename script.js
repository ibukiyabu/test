
document.write("問1"); //タイトル
document.write("<br>"); //改行用


//問1 回答

for(var i =1; i <= 5; i++){
    document.write("★");
}

//

document.write("<br><br>問2<br>");//改行用

//
//問2　回答

for (var i =1; i<=2; i++){
  for(var star = 1; star < 4; star++){
    document.write("★");
  }
  document.write("<br>");
}

//

document.write("<br><br>問3<br>");//改行用


//問3　回答

for (var i =1; i<=2; i++){
  for(var star = 1; star < 6; star++){
    document.write("☆");
  }
  document.write("<br>");
}

//

document.write("<br><br>問4<br>");//改行用

//問４　回答

for (var i =1; i<=4; i++){
  for(var star = 1; star < 6; star++){
    document.write("★");
  }
  document.write("<br>");
}

//

document.write("<br><br>問5<br>");//改行用

//問５　回答

for (var i =1; i<=4; i++){
  for(var star = 1; star < 4; star++){
    document.write("★");
  }
  document.write("<br>");
}

//

document.write("<br><br>問6<br>");//改行用

// 問６　回答

for (var i = 1; i < 4; i++) {
  for (var star = 1; star < 4; star++) {
    if (star % 2 != 1) {
      document.write("☆");
    } else {
      document.write("★");
    }
  }
  document.write("<br>");
}

//

document.write("<br><br>問7<br>");//改行用

//問7 回答

for (var i = 1; i < 5; i++) {
  for (var star = 1; star < 6; star++) {
    if (star % 2 === 0) {
      document.write("☆");
    } else {
      document.write("★");
    }
  }
  document.write("<br>");
}

//

document.write("<br><br>問8<br>");//改行用

//問8 回答

for (var i = 1; i < 6; i++) {
  for (var star = 1; star <= i; star++) {
      document.write("★");
  }
  document.write("<br>"); 
}
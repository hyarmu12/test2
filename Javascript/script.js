for(var 問1 = 1; 問1 <= 5; 問1++){
    document.write("★");
}
document.write("<br>");
document.write("<br>");

for(var 問2 = 1; 問2 <= 2; 問2++) {
    for(var toi2 = 1; toi2 <= 3; toi2++) {
        document.write("★");
    }
    document.write("<br>");
}
document.write("<br>");

for(var 問3 = 1; 問3 <= 2; 問3 ++) {
    for(var toi3 = 1; toi3 <=5; toi3++) {
        document.write("☆");
    }
    document.write("<br>");
}
document.write("<br>");
    
for(var 問4 = 1; 問4 <= 4; 問4++) {
    for(var star2 = 1; star2 <= 5; star2++) {
        document.write("★");
    }
    document.write("<br>");
}
document.write("<br>");

for(var 問5 = 1; 問5 <= 4; 問5++) {
    for(var toi5 = 1; toi5 <= 3; toi5++) {
        document.write("★");
    }
    document.write("<br>");
}
document.write("<br>");

for(var 問6 = 0; 問6 < 3; 問6++) {
    for(var toi6 = 0; toi6 < 3; toi6++) {
        if(toi6 % 2 ==0) {
            document.write("★");
        } else {
            document.write("☆");
        }
    }
    document.write("<br>");
}
document.write("<br>");

for(var 問7 = 0; 問7 < 4; 問7++) {
    for(var toi7 = 0; toi7 <= 4; toi7++) {
        if(toi7 % 2 ==0) {
            document.write("★");}
        else{
            document.write("☆");}
    }   document.write("<br>");
}
document.write("<br>");

for(var 問8 = 1; 問8 < 6; 問8++) {
    for(var toi8 = 1; toi8 < 問8+1; toi8++) {
        document.write("★");
    }
    document.write("<br>");
}
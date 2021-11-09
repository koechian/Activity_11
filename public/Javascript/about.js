var text = ['"You can never be overdressed or overeducated.”<br><br>~Oscar Wilde', '“A girl should be two things: classy and fabulous.”<br><br>~Coco Chanel', '“I do not know who invented high heels, but all women owe him a lot!”<br><br>~Marilyn Monroe','“The most beautiful makeup of a woman is passion. But cosmetics are easier to buy.”<br><br>~Yves Saint Laurent','“Simplicity is the keynote of all true elegance.”<br><br>~Coco Chanel','“Bow ties are cool.”<br><br>~Steven Moffat','“Some of the worst mistakes in my life were haircuts”<br><br>~Jim Morrison','“Elegance is refusal.”<br><br>~Coco Chanel'];
var counter = 0;
var elem = document.getElementById("quotes_display");
var inst = setInterval(change, 10000);

function change() {
  elem.innerHTML = text[counter];
  counter++;
  if (counter >= text.length) {
    counter = 0;
  }
}
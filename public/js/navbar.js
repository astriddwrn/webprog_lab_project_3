var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-10vh";
  }
  prevScrollpos = currentScrollPos;
}

function toggleEvent(id){
    var object = document.getElementById(id);
    object.classList.toggle('active');
  }

let suggestions = [
  "Hawaian Dress",
  "Black Active Set",
  "Formal Loose Office Shirt",
  "Loose Boxy Feminine Dress",
  "Light Wash Fur-Inner Jacket Denim",
  "Crop Hoodie Active Wear",
  "Beige Maternity Dress",
  "Women Formal Latex Bodysuit",
  "Winter Black Fur Coat",
  "Light Wash Denim Cropped Jacket",
  "Black Leather Jacket Silver Accessory",
  "Formal Lacey Off-The-Shoulder",
  "Winter Beige Fur Jacket",
  "Light Wash Grunged Denim Jacket",
  "Dark Wash Jacket Denim",
  "Black Formal Suit"
];

const searchWrapper = document.getElementById('search-wrapper');
const InputBox = document.getElementById('search');
const suggBox = document.getElementById('search-box');

InputBox.onkeyup = (e)=>{
  let userData= e.target.value;
  let emptyArray = [];
  if(userData){
    emptyArray = suggestions.filter((data)=>{
      return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
    })
    emptyArray = emptyArray.map((data)=>{
      return data = '<a>' + data + '</a>';
    })
    console.log(emptyArray);
  }
  showSuggestions(emptyArray)
}

function showSuggestions(list){
  let listData = [];
  if(list.length>0){
    for(let i = 0; i < 4 ; i++){
      listData.push(list[i]);
    }
    listData = listData.join('\n');
  }
  else{
    if(InputBox.value != "")
    listData = '<a>' + InputBox.value + '</a>';
  }
  suggBox.innerHTML = listData;
}
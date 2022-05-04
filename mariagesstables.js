function algomariage(){
var eleves=[
  ["Hélène","Courtois","HélèneCourtois@cy-tech.fr",30,15.992,"MMF","ACTU"],
  ["Zharlotte","Le","CharlotteLe@cy-tech.fr",30,15.391,"MMF","ACTU"],
  ["Laetitia","Rodrigues","LaetitiaRodrigues@cy-tech.fr",30,14.856,"MMF","ACTU"],
  ["Lucie","Lefebvre","LucieLefebvre@cy-tech.fr",30,14.85,"MMF","ACTU"],
  ["Daisy","De","Daisyde@cy-tech.fr",30,18.366,"MMF","ACTU"]
];

  elevestrie= preferencefiliere(eleves);
}

function propose(eleve, option){
  
}
//fonction qui classe les eleves en fct de leur moyenne
function preferencefiliere(tab){
  let cpt=true;
  while (cpt) {
    cpt=false;
    for (var i = 0; i < tab.length-1; i++) {
      if (tab[i][4]> tab[i+1][4]) {
        echanger(tab,i,i+1);
        cpt=true;
      }
    }
  }
  tab=tab.reverse();
  console.log(tab);
  return tab;
}

function echanger(tab,i,j){
    let temp=tab[i][4];
    tab[i][4]=tab[j][4];
    tab[j][4]=temp;

}

var userChoice = prompt("Você escolheu pedra, papel ou tesoura?");
var computerChoice = Math.random();

if (computerChoice < 0.34) {
	computerChoice = "pedra";
} else if (computerChoice <= 0.67) {
	computerChoice = "papel";
} else {
	computerChoice = "tesoura";
}

var compare = function (choice1, choice2) {
    if (choice1 === choice2) {
        return "Temos um empate!";
    }
    if (choice1 === "pedra") {
        if (choice2 === "tesoura") {
            return "pedra ganhou";
        } else {
            return "papel ganhou";
        }
    }
    if (choice1 === "papel") {
        if (choice2 === "pedra") {
            return "papel ganhou";
        } else {
            return "tesoura ganhou";
        }
    }
    if (choice1 === "tesoura") {
        if (choice2 === "pedra") {
            return "pedra ganhou";
        } else {
            return "tesoura ganhou";
        }
    }
};

compare(userChoice, computerChoice);

var bob = new Object();
bob.age = 30;
var novaArray = new Array();
novaArray = [34, 23, "Olá mundo!", true, false, "Oba-oba"];

var leandro = {
    nome: "Leandro Vieira",
    idade: 30,
    active: true
};

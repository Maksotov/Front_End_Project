let phone_number = "";
let z = 0;
let language = "";

let activities = document.getElementById("language");
activities.addEventListener("change", function() {
if(activities.value == "RU") {
        document.getElementById("kahoot").innerHTML = "Отправить запрос"; 
       document.getElementById("pin_code").placeholder = "Номер телефона";
       document.getElementById("enter").innerHTML = "Войти"; 
       document.getElementById("footer_enter").innerHTML = "Заявка обязательна, дополнительные вопросы: @alimingoi";                  
}else if(activities.value == "KZ") {
    document.getElementById("kahoot").innerHTML = "Өтініш жіберу"; 
    document.getElementById("pin_code").placeholder = "Телефон номеріңіз"; 
    document.getElementById("enter").innerHTML = "Енгізу";
    document.getElementById("footer_enter").innerHTML = "Өтініш міндетті түрде, қосымша сұрақтар: @alimingoi";
}else {
    document.getElementById("kahoot").innerHTML = "Submit a request"; 
    document.getElementById("pin_code").placeholder = "Phone number";  
    document.getElementById("enter").innerHTML = "Enter";
    document.getElementById("footer_enter").innerHTML = "Application is mandatory, additional questions: @alimingoi";                  
}
});

function isCorrect(event, pin_code) {
    if(z == 0) {
    let s = pin_code.value;
    let s2 = "";
        //8-(775)-056-6567
        if(event.keyCode == 8) {
        }else {
            let k = 0;
            let length = 0;
                for(let i = 0; i < s.length; i++) {
                    if(s.charAt(i) >= '0' && s.charAt(i) <= '9') {
                        if(length == 10) {
                            break;
                        }
                        if(k == 0) {
                            s2 += s.charAt(i) + "-(";
                        }else if(k == 3) {
                            s2 += s.charAt(i) + ")-";
                        }else if(k == 6) {
                            s2 += s.charAt(i) + "-";
                        }else 
                            s2 += s.charAt(i);
                        k++;
                        length++;
                    }
                }
                pin_code.value = s2;
        }
    }
}

function enter(pin_code) {
    phone_number = pin_code.value;

    if(z == 0) {
        if(phone_number.charAt(0) != '8' || phone_number == "" || haveLetter(phone_number)) {
            $("#footer_enter").hide();
            $("#pin_code").css("border-color", "red");
            $("#warning").show();
            $("#warning").slideUp("1000");
            $("#warning").slideDown("slow");
            if(phone_number == "") {
                if(activities.value == "EN") $("#warning").text("Oops! You need to enter a phone number before submitting a request");
                else if(activities.value == "RU")  $("#warning").text("Ой! Вам нужно ввести номер телефона, прежде чем оставить заявку");
                else $("#warning").text("Ой! Өтініш қалдырмас бұрын телефон нөмірін енгізу керек");
            }else {
                if(activities.value == "EN") $("#warning").text("Only Kazakhstan number is accepted here");
                else if(activities.value == "RU") $("#warning").text("Здесь принимается только казахстанский номер");
                else $("#warning").text("Мұнда тек қазақстандық нөмір қабылданады");
            }
        }else {
            pin_code.value = "";
            language = activities.value;
            $(".languages").hide();
            $("#warning").hide();
            $("#pin_code").css("border-color", "black");
            if(activities.value == "EN") {
                pin_code.placeholder = "Full Name"
                document.getElementById("enter").innerHTML = "Ok,   go"
            }else if(activities.value == "RU") {
                pin_code.placeholder = "ФИО"
                document.getElementById("enter").innerHTML = "Начать"
            }else {
                pin_code.placeholder = "Аты-жөні"
                document.getElementById("enter").innerHTML = "Бастау"
            }

            ++z;
        }
    }else {
        $(".enter_game").hide();
        $("#footer_enter").hide();
        document.body.style.backgroundColor = "#25076b";
        const container = document.getElementsByClassName("container");
        const div1 = document.createElement("div");
        div1.id = "ques";
        var inputForDate = document.createElement("input");
        inputForDate.setAttribute("type", "number");
        inputForDate.setAttribute("name", "age");
        inputForDate.id = "inputForNumber1";
        if(activities.value == "KZ") inputForDate.placeholder = "Жасы:"
        else if(activities.value == "EN") inputForDate.placeholder = "Age:"
        else inputForDate.placeholder = "Возраст:"
        let selectList1 = document.createElement("select");
        selectList1.className = "mySelect";
        selectList1.id = "mySelect1";
        selectList1.setAttribute("name", "subject");
       
        var arr1;
        var arr2;
        if(language == "KZ") {
            arr1 = ["Бейіндік пән*","Биология және География", "Математика және Физика", "Химия және Биология", "Дүниежүзі тарихы және География", "Қазақ тілі және Қазақ әдебиеті", "Жоқ"];
        }else if(language == "EN") {
            arr1 = ["Subject*","Biology and Geography", "Mathematics and Physics", "Chemistry and Biology", "World history and geography", "Kazakh language and Kazakh literature", "NO"];
        }else {
            arr1 = ["Предмет*","Биология және География", "Математика және Физика", "Химия және Биология", "Всемирная история и география", "Казахский язык и казахская литература", "Нет"];
        }
        arr2 = ["*","Biology and Geography", "Mathematics and Physics", "Chemistry and Biology", "World history and geography", "Kazakh language and Kazakh literature","NO"];
        for(let i = 0; i < arr1.length; i++) {
            let option = document.createElement("option");
            option.value = arr2[i];
            option.text = arr1[i];
            selectList1.appendChild(option);
        }

        let selectList2 = document.createElement("select");
        selectList2.className = "mySelect";
        let arr3;
        let arr4;
        if(language == "KZ") {
            arr3 = ["Дайындық*","ҰБТ", "КТЛ", "НИШ"];
        }else if(language == "EN") {
            arr3 = ["Preparation*","UBT", "KTL", "NISH"];
        }else {
            arr3 = ["Подготовка*","ЕНТ", "КТЛ", "НИШ"];
        }
        arr4 = ["*","UBT", "KTL", "NISH"];
        for(let i = 0; i < arr3.length; i++) {
            let option = document.createElement("option");
            option.value = arr4[i];
            option.text = arr3[i];
            selectList2.appendChild(option);
        }
        selectList2.setAttribute("name", "preparation");
        var textToAdd = "DOSTYK BILIM";
        var placeHolder = 0;
        const demo = document.createElement("p");
        demo.id = "demo";
        var textAdder = setInterval(function(){
            demo.innerHTML += textToAdd.charAt(placeHolder);
            if (++placeHolder == textToAdd.length){
                clearInterval(textAdder);
            }
        }, 100);
        let button = document.createElement("button");
        button.id = "otpravit";
        if(language == "KZ") button.textContent = "Жіберу";
        else if(language == "EN") button.textContent = "Send";
        else button.textContent = "Отправить ";
        button.setAttribute("type", "submit");
        div1.appendChild(inputForDate)
        div1.appendChild(selectList1);
        div1.appendChild(selectList2);
        container[0].appendChild(demo);
        container[0].appendChild(div1);
        container[0].appendChild(button);
    }
}
function haveLetter(s) {
    for(let i = 0; i < s.length; i++) {
        if((s.charAt(i) >= '0' && s.charAt(i) <= '9') || (s.charAt(i) == '-') || (s.charAt(i) == '(')|| (s.charAt(i) == ')')) {
            continue;
        }else {
            return true;
        }
    }

        return false;
}
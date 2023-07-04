console.log("Loading JavaScript...");

function saveClient(){
    
    
    let namesClient=document.getElementById("names");
    let lastnamesClient=document.getElementById("lastnames");
    let typeidClient=document.getElementById("typeid");
    let nidClient=document.getElementById("numberid");
    let telClient=document.getElementById("telephone");
    let emailClient=document.getElementById("email");
    let occupationClient=document.getElementById("occupation");
    let roleClient=document.getElementById("role");


    let client={
        names: namesClient.value,
        lastnames: lastnamesClient.value,
        typeid: typeidClient.value,
        numberid: nidClient.value,
        telephone: telClient.value,
        email: emailClient.value,
        occupation: occupationClient.value,
        role: roleClient.value
    }

    console.log(client);

    let url = "http://localhost:8000/api/client";
    
    let params={
        method: "POST",
        headers:{ 
            "Content-Type":"application/json"
    },
    body: JSON.stringify(client)
    }

    fetch(url,params).then((response) =>{

        console.log(response);
        console.log(response.json());

        if(response.status == 201){
            alert("Creación Exitosa Cliente !!");
        }else{
            alert("Error en la creación de Cliente !!");
        }
    
    });
    //alert("Creación Libro");
    return true;
}


/*
function getClients(){

    let url = "http://localhost:8000/api/clients";
    let params = {
        method: "GET",
        headers:{ 
            "Content-Type": "application/json"
            },   
    }

    fetch(url,params).then((response) =>{
        console.log(response);    
        console.log(response.json());

        if(response.status == 200){
            alert("Consulta Exitosa Clientes !!");
        }else{
            alert("Error en la consulta de Cliente !!");
        }
    });

    //alert("Creación Cliente");


    return true;
    
}

*/
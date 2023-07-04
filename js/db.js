console.log("Loading JavaScript...");

function getClients(){

    let url = "http://localhost:8000/api/clients";
    let params = {
        method: "GET",
        headers:{ 
            "Content-Type": "application/json"
            },   
    }

    fetch(url,params).then((response) =>{
        //console.log(response);    
        //console.log(response.json());

        if(response.status == 200){
            alert("Consulta Exitosa de datos !!");
            let datos = response.json();
            console.log(datos);
        }else{
            alert("Error en la consulta de datos !!");
        }
    });

    


    return true;
    
}


function updateClient(){
    
    let idClient=document.getElementById("id");
    let namesClient=document.getElementById("names");
    let lastnamesClient=document.getElementById("lastnames");
    let typeidClient=document.getElementById("typeid");
    let nidClient=document.getElementById("numberid");
    let telClient=document.getElementById("telephone");
    let emailClient=document.getElementById("email");
    let occupationClient=document.getElementById("occupation");
    let roleClient=document.getElementById("role");


    let client={
        id: idClient.value,
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
        method: "PUT",
        headers:{ 
            "Content-Type":"application/json"
    },
    body: JSON.stringify(client)
    }

    fetch(url,params).then((response) =>{

        console.log(response);
        console.log(response.json());

        if(response.status == 200){
            alert("Actualización Exitosa !!");
        }else{
            alert("Error en la actualización !!");
        }
    
    });

    return true;
}


function deleteClient(){
    
    let idClient=document.getElementById("id");
    


    let client={
        id: idClient.value,
    }

    console.log(client);

    let url = "http://localhost:8000/api/client";
    
    let params={
        method: "DELETE",
        headers:{ 
            "Content-Type":"application/json"
    },
    body: JSON.stringify(client)
    }

    fetch(url,params).then((response) =>{

        console.log(response);
        console.log(response.json());

        if(response.status == 200){
            alert("Eliminación Exitosa !!");
        }else{
            alert("Error en la eliminación !!");
        }
    
    });
    //alert("Creación Libro");
    return true;
}
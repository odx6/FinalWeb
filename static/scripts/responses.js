function getBotResponse(input) {
    //rock paper scissors
    if (input == "rock") {
        return "paper";
    } else if (input == "paper") {
        return "scissors";
    } else if (input == "scissors") {
        return "rock";
    }

    // Simple responses
    if (input == "hola") {
        return "¡Hola! Gracias por ponerte en contacto con nosotros, agradecemos tu interés. Si tienes alguna duda o pregunta no dudes en consultar, Alebrijes Libelula esta para brindarte el mejor servicio. Visita nuestra tienda en Blvd. Eduardo Vasconcelos 218, Centro, 68080 Oaxaca de Juárez, Oax. ";
    } else if (input == "adios") {
        return "Hablamos más tarde";
    } else {
        return "¿Necesitas ayuda?. ";
    }
}
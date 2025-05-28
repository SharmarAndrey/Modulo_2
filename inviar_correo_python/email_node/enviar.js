const nodemailer = require("nodemailer");

// Configurar el transporte SMTP de Gmail
const transporter = nodemailer.createTransport({
  service: "gmail",
  auth: {
    user: "sharmarandrey@gmail.com", // tu Gmail
    pass: "imfonxxgzhghfros", // contraseña de aplicación generada
  },
});

// Configurar el mensaje
const mailOptions = {
  from: "tucorreo@gmail.com",
  to: "destinatario@ejemplo.com",
  subject: "Correo de prueba desde Node.js",
  text: "Hola! Este correo fue enviado desde Node.js usando Gmail y contraseña de aplicación.",
};

// Enviar el correo
transporter.sendMail(mailOptions, (error, info) => {
  if (error) {
    return console.log("Error:", error);
  }
  console.log("Correo enviado:", info.response);
});

// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.4/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.4/firebase-analytics.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyAwI08GcNOZUMdnsxAX9qN-S1pqR_MZssg",
  authDomain: "kfcp-applicant-registration.firebaseapp.com",
  projectId: "kfcp-applicant-registration",
  storageBucket: "kfcp-applicant-registration.appspot.com",
  messagingSenderId: "875337731188",
  appId: "1:875337731188:web:a3f5c0dfba9cb237f39521",
  measurementId: "G-5EQ5HBGFX7"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
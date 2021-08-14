import firebase from "firebase";

const firebaseConfig = {
    apiKey: "AIzaSyAFUdvrhB6FmlJ6zlInA9wZETlB_4ty8pQ",
    authDomain: "test-project-95e95.firebaseapp.com",
    projectId: "test-project-95e95",
    storageBucket: "test-project-95e95.appspot.com",
    messagingSenderId: "625488682448",
    appId: "1:625488682448:web:8d19dc2c19408ed7ea6dd5",
    measurementId: "G-7JM9GJ2JEX"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

export default firebase;
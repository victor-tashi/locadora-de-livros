const firebaseConfig = {
    apiKey: "AIzaSyDRx5iAhyuF2BddL9c_TzXpB2XluIT8uOQ",
    authDomain: "locadora-de-livros.firebaseapp.com",
    projectId: "locadora-de-livros",
    storageBucket: "locadora-de-livros.appspot.com",
    messagingSenderId: "656662315194",
    appId: "1:656662315194:web:1e008e7c2123b6948e0283",
    measurementId: "G-KQYX0VRM59"
};


firebase.initializeApp(firebaseConfig);

function login(firebaseConfig) {
    console.log("antes")
    var email = document.getElementById("email").value
    var senha = document.getElementById("senha").value

    firebase.auth().signInWithEmailAndPassword(email, senha).then(Response => {
        window.location.href = 'menu.html'
    }).catch(error => {
        console.log('error', error);
    })
    console.log("depois")
}

function singIn(firebaseConfig){
    console.log("antes")
    var email = document.getElementById("email").value
    var senha = document.getElementById("senha").value
        
        firebase.auth().createUserWithEmailAndPassword(email, senha).then(Response => {
            window.location.href = 'menu.html'
        }).catch(error=> {
            console.log('error', error);
        })
        console.log("depois")

};
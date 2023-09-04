/*
Give the service worker access to Firebase Messaging.
Note that you can only use Firebase Messaging here, other Firebase libraries are not available in the service worker.
*/
importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-messaging.js');
   
/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
* New configuration for app@pulseservice.com
*/
firebase.initializeApp({
  apiKey: "AIzaSyD7hwZEZsT5l_L61TV-qz_blWOAG-fMeLw",
  authDomain: "test-project-b4d3b.firebaseapp.com",
  databaseURL: "https://itdemo-push-notification.firebaseio.com",
  projectId: "test-project-b4d3b",
  storageBucket: "test-project-b4d3b.appspot.com",
  messagingSenderId: "139290698662",
  appId: "1:139290698662:web:0bf07c7ff9375db35c2567",
  measurementId:  "G-P83HFPS69R"
    });
  
/*
Retrieve an instance of Firebase Messaging so that it can handle background messages.
*/
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function(payload) {
    console.log(
        "[firebase-messaging-sw.js] Received background message ",
        payload,
    );
    /* Customize notification here */
    const notificationTitle = "Background Message Title";
    const notificationOptions = {
        body: "Background Message body.",
        icon: "/itwonders-web-logo.png",
    };
  
    return self.registration.showNotification(
        notificationTitle,
        notificationOptions,
    );
});
import Echo from "laravel-echo";

import Pusher from "pusher-js";
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: "pusher",
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true,
});

const userId = window.Laravel.userId;
// console.log(window.Laravel);

window.Echo.private(`test-channel`).listen(".test_event_" + userId, (e) => {
    // console.log(e.order);
    // alert(e);
    alert("We are here?!");
});

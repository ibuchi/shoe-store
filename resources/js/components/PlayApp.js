export default () => {
    return {
        toast() {
            Toastify({
                text: "This is a toast",
                duration: 3000
                }).showToast();
        },

        sayHi() {
            console.log('hi');
        }


    }

}

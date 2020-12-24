<script>
export default {
    data() {
        return {
            showPassword: false,
            showConfirmPassword: false,
            name: "",
            nameRules: [
                value => !!value || "Name is reqired",
                value => value.length > 3 || "Minimum length is 3."
            ],
            email: "",
            emailRules: [
                value => !!value || "Email is required.",
                value =>
                    value.indexOf("@") !== 0 || "Email should have a username.",
                value =>
                    value.includes("@") || "Email should include an @ symbol.",
                value =>
                    value.indexOf(".") - value.indexOf("@") > 1 ||
                    "Email should contain a valid domain.",
                value =>
                    value.indexOf(".") <= value.length - 3 ||
                    "Email should contain a valid domain extension."
            ],
            password: "",
            passwordRules: [
                value => !!value || "Password is required.",
                   
                value => !!value || "Min. 8 characters."
                        
            ],
            password_confirmation: "",
            confirmPasswordRules: [value => !!value || "Confirm your password"],
            formValidity: false
        }
    }
}
</script>
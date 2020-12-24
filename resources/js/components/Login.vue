<script>
export default {
    
    data() {
        return {
            showPassword: false,
            email: "",
            password: "",
            valid: true,
            rememberMe: null
        }
    },

    methods: {
        login() {
            if (this.email == '' || this.password == '') {
            
                  this.validate()
                
              }

        },
         validate() {
           return this.$refs.form.validate()
       }


    }
}
</script>
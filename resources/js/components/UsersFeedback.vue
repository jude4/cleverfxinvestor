<template>
    <div>
        <v-card>
            <v-card-title class="">
                Investors Feedback
            </v-card-title>
            <v-alert type="success" v-if="successMessage" width="40%">
                {{successMessage}}
            </v-alert>
            <v-card-text>
                <v-form @submit.prevent="addReview" ref="form">
                    <v-text-field
                    outlined
                    label="Name"
                    color="#b17c2e"
                    v-model="name"
                    :rules="nameRules"
                    ></v-text-field>
                    <h3>Rating <span>({{ rating }} out of 5)</span></h3>
                    <v-rating color="#b17c2e" v-model="rating" value=""></v-rating>
                    <v-textarea
                    label="Message"
                    v-model="message"
                    :rules="messageRules"
                    outlined
                    color="#b17c2e"
                    ></v-textarea>
                    <v-btn color="#b17c2e" block dark @click.prevent="addReview">Submit</v-btn>
                </v-form>
            </v-card-text>
        </v-card>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data() {
        return {
            rating: 0,
            name: null,
            message: null,
            successMessage: null,
            messageRules: [
                value => !!value || "Message is required"
            ],
            nameRules: [
                value => !!value || "Name is required"
            ],
            disabled: true,
            formValidity: false
        }
    },

    methods: {
        addReview() {
            axios.post('/reviews', {
                    'name' : this.name,
                    'message' : this.message,
                    'rating' : this.rating
            }).then((response) => {
                this.successMessage = 'Saved'
                this.resetField()
            }).catch((error) => {
                //
            })
        },

        resetField() {
            this.name = ''
            this.message = ''
            this.rating = 0
        }
    }
}
</script>
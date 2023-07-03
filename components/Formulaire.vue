<template>
    <div>
      <form @submit="submitForm">
        <input type="text" id="name" placeholder="Name" v-model="formData.name" required>
  
        <input type="email" id="email" placeholder="E-mail" v-model="formData.email" required>

        <input type="text" id="subject" placeholder="Subject" v-model="formData.subject" required>
  
        <textarea id="message" placeholder="Message" v-model="formData.message" required></textarea>
  
        <Button type="submit" text="Send" />
      </form>
    </div>
</template>
  
  <script>
  import emailjs from 'emailjs-com';
  
  export default {
    data() {
      return {
        formData: {
          name: '',
          email: '',
          message: '',
          subject: ''
        }
      };
    },
    methods: {
      async submitForm(event) {
        event.preventDefault();
  
        try {
          await emailjs.send('service_jg2ol7m', 'template_oiwzjgt', this.formData, 'Mn1rBcHv9OjKsfz56');
          alert('Message envoyé avec succès !');
          // Réinitialiser les champs du formulaire après l'envoi réussi
          this.formData = {
            name: '',
            email: '',
            subject:'',
            message: ''
          };
        } catch (error) {
          console.error(error);
          alert('Une erreur s\'est produite lors de l\'envoi du message.');
        }
      }
    }
  };
  </script>
  
<style lang="scss" scoped>
form {
  display: flex;
  flex-direction: column;
}
form input {
  border: none;
  background-color: rgba(82, 93, 103, 0.427);
  padding: 20px 30px;
  width: 100%;
  border-radius: 10px;
  margin: 1vh 0;
  font-size: 16px;
  font-weight: 400;
  line-height: 22px;
  outline: none;
  color: var(--color-text);
  font-family: "Nexa";
}
form textarea {
  border: none;
  background-color: rgba(82, 93, 103, 0.427);
  padding: 20px 30px;
  width: 100%;
  border-radius: 10px;
  margin: 1vh 0 4vh 0;
  outline: none;
  color: var(--color-text);
  font-family: "Nexa";
  font-size: 16px;
  font-weight: 400;
  line-height: 22px;
}
</style>
<template>
    <div class="container">
      <div class="m-auto vstack gap-3">

        <h1 id="titlecColor" class="m-0">Latch</h1>
        <p id="textColor">
          Welcome to Latch.<br></br>
          This app organizes and saves images from a specified URL.
        </p>

        <div class="section-wrapper">
          <form id="searchUrlForm" class="search vstack gap-4 align-items-center mx-2">
            <input id="searchUrlInput" class="form-control" type="text" placeholder="Search"></input>
            <button id="searchUrlButton" class="btn btn-outline-primary px-5" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>

    <div class="container">
      <div>
      </div>
    </div>
</template>

<script>
import { ref, onMounted } from 'vue';
export default {
  name: 'App',
  
  setup() {
    onMounted(() => {
      document.title = 'Latch - Home';
    });
  }
}
</script>

<style scoped>
#titlecColor {
    color: #d62b53;
    font-size: 5rem;
}

#textColor {
    color: #f0bc43;
    font-size: 14px;
}

.container {
  max-width: 800px;
  margin: 20px auto;
  padding: 20px;
  text-align: center;
  font-family:Arial, Helvetica, sans-serif
}

/* form */
#searchUrlInput {
  border-color: #b8b7b7;
  background-color: #151518;
  color: #ffffff;
}
#searchUrlInput::placeholder {
  color:#878787;
}
#searchUrlInput:focus{
  border-color: #d62b53;
  box-shadow: none;
}
#searchUrlInput:hover{
  color: #ffffff;
  border-color: #d62b53;
}

/* btn */
#searchUrlButton {
  border-radius: 10px;
  border-color: #f3f3f3;
  color: #d62b53;
}
#searchUrlButton:hover {
  background-color: #d62b53;
  color: #ffffff;
  border-color: #d62b53;
}

</style>
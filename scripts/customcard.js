(function(){

  const template = document.createElement("template");
  template.id = "custom-card-template";
  template.innerHTML= `
  <style>
  .main__cardbody{
    position: relative;
    display:flex;
    flex-direction:column;
    align-items:flex-start;
    background-color: #9F5865;
    width:200px;
    margin-top:50px;
    padding-top:50px;
    padding-left:10px;
    border-radius: 10px;
    box-shadow:0px 2px 5px #1A4888;

  }
  .main_cardimage{
    position: absolute;
    top:-50px;
    width:150px;
    margin-left:25px;
    overflow: hidden;
    background-color: #1A4888;
    border-radius: 20px;
  }
  .main_cardimage img{
    max-width: 100%;
    filter: drop-shadow(1px 1px 3px #FAF9F8);
  }

  [name="main__cardbody--headline"]::slotted(span)
  {
    font-family: "Helvetica", sans-serif;
    width:200px;
    font-weight: 100;
    font-size: .90em;
    color:#FAF9F8;
    text-align:left;
  }
  [name="main__cardbody--content"]::slotted(span)
  {
    font-family: "Helvetica", sans-serif;
    font-weight: 100;
    font-size: .75em;
    color:#FAF9F8;
    text-align:left;
  }

  [name="main__cardbody--content"]::slotted(span>a::visited)
  {
    color: black;
  }

  </style>
  <div class="main__cardbody">
    <div class="main_cardimage">
      <img src="images/pentax-me-super.png" />
    </div>
  <h3 class="main__cardbody--headline"><slot name="main__cardbody--headline"></slot></h3>
  <p class="main__cardbody--content"><slot name="main__cardbody--content"></slot></p>
  </div>
  `;
  document.body.appendChild(template);



  customElements.define("custom-card",
     class CustomCard extends HTMLElement{
    constructor() {
          super();
          this.attachShadow({ mode: "open" });
               }

    connectedCallback() {
            const tmpl = document.getElementById ("custom-card-template");
            const node = document.importNode(tmpl.content, true);
            this.shadowRoot.appendChild(node);
          }
             });


})();

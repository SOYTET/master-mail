<style>

  :root {
    --color-primary: hsl(310, 100%, 65%);
    --color-secondary: hsl(160, 100%, 65%);
    --background: hsl(230, 30%, 15%);
    --text: hsl(310, 100%, 95%);
  }

  ::selection {
    background-color: var(--color-primary);
    color: var(--background);
    -webkit-text-fill-color: var(--background);
  }

  * {
    box-sizing: border-box;
  }

  body {
    display: grid;
    place-content: center;
    gap: 1vh;
    min-height: 100vh;
    width: min(60ch, 100vw - 2rem);
    margin-right: auto;
    margin-left: auto;
    font-size: 1.5rem;
    line-height: 1.5;
    background-color: var(--background);
    color: var(--text);
    overflow-x: hidden;
  }

  h1 {
    color: var(--color-primary);
  }

  blockquote {
    border-left: 5px solid;
    margin-left: 0;
    padding: 1rem 0 1rem 2rem;
    font-size: 2rem;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-image: linear-gradient(35deg,
        var(--color-primary),
        var(--color-secondary));

    p {
      margin: 0;
    }
  }

  .btn_back {
    height: 50px;
    width: 100px;
    position: absolute;
    font-size: 18px;
    top: 40px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }
  .docs{
    font-family:Verdana, Geneva, Tahoma, sans-serif;
  }
  p {
    width: 600px;
    height: auto;
    text-align: justify;
  }
  #msgEncrypted {
    width: 60vw;
    justify-content: center;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
</style>
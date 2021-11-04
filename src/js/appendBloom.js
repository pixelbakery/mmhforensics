export const appendScript = (scriptToAppend) => {
    const script = document.createElement("script");
    script.src = scriptToAppend;
    script.type="module";
    script.async = true;
    document.body.appendChild(script);
}
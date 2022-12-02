const footerTemplate = `
    <footer>
        <div class="credit">
            &copy; 2022 | Designed and developed by <a href="https://www.linkedin.com/in/david-ofili-7b9a752a/" 
            target="_blank">David Ofili</a>. Powered by <a href="https://code-academy.co.uk/" 
            target="_blank">Code Academy UK</a> | All rights reserved.
        </div>
    </footer>
`;

const main = document.querySelector(".pages-body");

const footerComponent = document.createElement("section")
footerComponent.classList.add("footer")
footerComponent.setAttribute("id", "runningFooter")
footerComponent.innerHTML = footerTemplate; 

main.append(footerComponent);

export default footerTemplate;
document.getElementById('product-click').addEventListener("click", missionClick);
document.getElementById('company-click').addEventListener("click", visionClick);
document.getElementById('category-click').addEventListener("click", philosophyClick);

const productContent = document.getElementById('product-content');
const companyContent = document.getElementById('company-content');
const categoryContent = document.getElementById('category-content');

/*********************************************
MISSION CLICK
**********************************************/

function missionClick() {
    if (productContent.classList.contains('inactive')) {
        productContent.classList.remove('inactive');
        productContent.classList.add('active');
    } else if (productContent.classList.contains('active')) {
        productContent.classList.remove('active');
        productContent.classList.add('inactive');
    }
    const ansV = companyContent.classList.contains('active')
    if (ansV) {
        companyContent.classList.remove('active');
        companyContent.classList.add('inactive');

    }
    const ansP = categoryContent.classList.contains('active')
    if (ansP) {
        categoryContent.classList.remove('active');
        categoryContent.classList.add('inactive');

    }
}

/*********************************************
VISION CLICK
**********************************************/


function visionClick() {
    if (companyContent.classList.contains('inactive')) {
        companyContent.classList.remove('inactive');
        companyContent.classList.add('active');
    } else if (companyContent.classList.contains('active')) {
        companyContent.classList.remove('active');
        companyContent.classList.add('inactive');
    }
    const ansM = productContent.classList.contains('active')
    if (ansM) {
        productContent.classList.remove('active');
        productContent.classList.add('inactive');

    }
    const ansP = categoryContent.classList.contains('active')
    if (ansP) {
        categoryContent.classList.remove('active');
        categoryContent.classList.add('inactive');
    }
}

/*********************************************
PHILOSOPHY CLICK
**********************************************/


function philosophyClick() {
    if (categoryContent.classList.contains('inactive')) {
        categoryContent.classList.remove('inactive');
        categoryContent.classList.add('active');
    } else if (categoryContent.classList.contains('active')) {
        categoryContent.classList.remove('active');
        categoryContent.classList.add('inactive');
    }
    const ansM = productContent.classList.contains('active')
    if (ansM) {
        productContent.classList.remove('active');
        productContent.classList.add('inactive');

    }
    const ansV = companyContent.classList.contains('active')
    if (ansV) {
        companyContent.classList.remove('active');
        companyContent.classList.add('inactive');

    }
}

document.getElementById("product-view").addEventListener("click", productviewclick);

const firstpanel = document.getElementById("first-dashboard-panel")
const viewProduct = document.getElementById("all-product-panel")
const addProduct = document.getElementById("add-product-panel")
const viewCompany = document.getElementById("all-company-panel")
const addCompany = document.getElementById("add-company-panel")
const viewCategory = document.getElementById("all-category-panel")
const addCategory = document.getElementById("add-category-panel")

function productviewclick(){
    firstpanel.style.display="none";
    addProduct.style.display="none";
    viewProduct.style.display="block";
    viewCompany.style.display="none";
    addCompany.style.display="none";
    viewCategory.style.display="none";
    addCategory.style.display="none";
}

document.getElementById("add-product").addEventListener("click", addproductclick);

function addproductclick(){
    firstpanel.style.display="none";
    addProduct.style.display="block";
    viewProduct.style.display="none";
    viewCompany.style.display="none";
    addCompany.style.display="none";
    viewCategory.style.display="none";
    addCategory.style.display="none";
}

document.getElementById("company-view").addEventListener("click", companyviewclick);

function companyviewclick(){
    firstpanel.style.display="none";
    addProduct.style.display="none";
    viewProduct.style.display="none";
    viewCompany.style.display="block";
    addCompany.style.display="none";
    viewCategory.style.display="none";
    addCategory.style.display="none";
}
document.getElementById("add-company").addEventListener("click", addCompanyclick);

function addCompanyclick(){
    
    firstpanel.style.display="none";
    addProduct.style.display="none";
    viewProduct.style.display="none";
    viewCompany.style.display="none";
    addCompany.style.display="block";
    viewCategory.style.display="none";
    addCategory.style.display="none";
}

document.getElementById("category-view").addEventListener("click", categoryviewclick);

function categoryviewclick(){
    firstpanel.style.display="none";
    addProduct.style.display="none";
    viewProduct.style.display="none";
    viewCompany.style.display="none";
    addCompany.style.display="none";
    viewCategory.style.display="block";
    addCategory.style.display="none";
}

document.getElementById("add-category").addEventListener("click", addCategoryclick);

function addCategoryclick(){
    
    firstpanel.style.display="none";
    addProduct.style.display="none";
    viewProduct.style.display="none";
    viewCompany.style.display="none";
    addCompany.style.display="none";
    viewCategory.style.display="none";
    addCategory.style.display="block";
}
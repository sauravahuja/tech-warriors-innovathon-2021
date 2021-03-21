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

const firstpanel = document.getElementById("first-dashboard-panel")
const viewProduct = document.getElementById("all-product-panel")
const addProduct = document.getElementById("add-product-panel")
const viewCompany = document.getElementById("all-company-panel")
const addCompany = document.getElementById("add-company-panel")
const viewCategory = document.getElementById("all-category-panel")
const addCategory = document.getElementById("add-category-panel")
const salesView = document.getElementById("sales")
const addRequest = document.getElementById("new-request")

function productviewclick(){
    firstpanel.style.display="none";
    addProduct.style.display="none";
    viewProduct.style.display="block";
    viewCompany.style.display="none";
    addCompany.style.display="none";
    viewCategory.style.display="none";
    addCategory.style.display="none";
    salesView.style.display="none";
    addRequest.style.display="none";
}


function companyviewclick(){
    firstpanel.style.display="none";
    addProduct.style.display="none";
    viewProduct.style.display="none";
    viewCompany.style.display="block";
    addCompany.style.display="none";
    viewCategory.style.display="none";
    addCategory.style.display="none";
    salesView.style.display="none";
    addRequest.style.display="none";
}



function categoryviewclick(){
    firstpanel.style.display="none";
    addProduct.style.display="none";
    viewProduct.style.display="none";
    viewCompany.style.display="none";
    addCompany.style.display="none";
    viewCategory.style.display="block";
    addCategory.style.display="none";
    salesView.style.display="none";
    addRequest.style.display="none";
}



function salesviewclick(){
    firstpanel.style.display="none";
    addProduct.style.display="none";
    viewProduct.style.display="none";
    viewCompany.style.display="none";
    addCompany.style.display="none";
    viewCategory.style.display="none";
    addCategory.style.display="none";
    salesView.style.display="block";
    addRequest.style.display="none";
}



function addproductclick(){
    firstpanel.style.display="none";
    addProduct.style.display="block";
    viewProduct.style.display="none";
    viewCompany.style.display="none";
    addCompany.style.display="none";
    viewCategory.style.display="none";
    addCategory.style.display="none";
    salesView.style.display="none";
    addRequest.style.display="none";
}


function addCompanyclick(){
    
    firstpanel.style.display="none";
    addProduct.style.display="none";
    viewProduct.style.display="none";
    viewCompany.style.display="none";
    addCompany.style.display="block";
    viewCategory.style.display="none";
    addCategory.style.display="none";
    salesView.style.display="none";
    addRequest.style.display="none";
}

function addCategoryclick(){
    
    firstpanel.style.display="none";
    addProduct.style.display="none";
    viewProduct.style.display="none";
    viewCompany.style.display="none";
    addCompany.style.display="none";
    viewCategory.style.display="none";
    addCategory.style.display="block";
    salesView.style.display="none";
    addRequest.style.display="none";
}

function addReuestclick(){
    
    addRequest.style.display="block";
    firstpanel.style.display="none";
    addProduct.style.display="none";
    viewProduct.style.display="none";
    viewCompany.style.display="none";
    addCompany.style.display="none";
    viewCategory.style.display="none";
    addCategory.style.display="none";
    salesView.style.display="none";
}

document.getElementById("product-view").addEventListener("click", productviewclick);
document.getElementById("company-view").addEventListener("click", companyviewclick);
document.getElementById("category-view").addEventListener("click", categoryviewclick);
document.getElementById("view-sales").addEventListener("click", salesviewclick);

document.getElementById("add-product").addEventListener("click", addproductclick);
document.getElementById("add-company").addEventListener("click", addCompanyclick);
document.getElementById("add-category").addEventListener("click", addCategoryclick);
document.getElementById("add-request").addEventListener("click", addReuestclick);


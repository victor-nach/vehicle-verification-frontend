const baseUrl = 'https://plapp-1.herokuapp.com';

export const fetchGet = async url => {
    const response = await fetch(baseUrl + url);
    if (response.status !== 200) return false;
    const { data } = await response.json();
    return data;
}

export const fetchPost = async (url, formBody) => {
    const options = {
        method: 'POST',
        headers: {'Content-Type': 'application/json' },
        body: JSON.stringify({ ...formBody, userId: 1, })
    }
    console.log(options.body);
    const response = await fetch(baseUrl + url, options);
    if (response.status !== 200) return false;
    const { data } = await response.json();
    return data;
}

export const getFormBody = e => {
    const obj = {};
    for (const item of e.srcElement) {
        Object.assign(obj, {
            [item.name]: item.value
        });
    }
    return obj;
}

export const hideElem = (...elements) => {
    elements.forEach( elem => {
        elem.classList.add('d-none');
    });
}

export const showElem = (...elements) => {
    elements.forEach( elem => {
        elem.classList.remove('d-none');
    });
}

const helper = {
    removeATags(htmlContent) {
        const regex = /<a\b[^>]*>(.*?)<\/a>/gi;
        return htmlContent.replace(regex, "$1");
    },
    setMobileFormat(number) {
        if (!number) return "";
        return number
            .replace(/[^0-9]/g, "")
            .replace(/^(\d{2,3})(\d{3,4})(\d{4})$/, `$1-$2-$3`);
    },
};

export default helper;

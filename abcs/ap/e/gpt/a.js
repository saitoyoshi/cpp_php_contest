function main() {
    const pat = /\b[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[A-Za-z]{2,}\b/;
    const s1 = "This is a test sentence with an email address example@example.com. Another sentence with no email address. Please contact me at myemail@example.org if you have any questions."
    const s2 = "This is a test sentence with an email address example@example.com.";
    const s3 = "Another sentence with no email address.";
    const s4 = "Contact us at info@example.com for more information. You can also reach us at contact@company.com Please send your inquiries to support@example.org";
    const arr = [s1, s2, s3, s4];
    const N = 4;
    for (let i = 0; i < N; i++) {
        if (pat.test(arr[i])) {
            console.log(pat.exec(arr[i])[0] + ' ' + pat.exec(arr[i])['input']);
        }
    }
}
main();
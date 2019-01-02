/*

<input placeholder="string1" id='1'>
<input placeholder="string2" id='2'>
</br>
</br>
<input value="Click me" type="button">
<input id="3" disabled>

*/

function get(str1, str2){
    let longest = "";
    for(let i = 0; i < str1.length; ++i){
        let temp1 = str1.slice(i, str1.length), temp2 = str2;
        let check = (str1, str2) => {
            let sequence = "", index;
            while(str2.length && str1.length){
                while((index = str2.indexOf(str1[0])) == -1 && str1.length) str1 = str1.slice(1, str1.length);
                if(index == -1) break;
                sequence += str2[index];
                str2 = str2.slice(index + 1, str2.length);
                str1 = str1.slice(1, str1.length);
            }
            return sequence;
        }
        let result = check(temp1, temp2);
        if(result.length > longest.length) longest = result;
    }
    return longest;
}
document.querySelector('input[type=button]').onclick = () => {document.getElementById('3').value = get(document.getElementById('1').value, document.getElementById('2').value);};

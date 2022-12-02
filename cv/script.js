function ageConvertor(age) {
  let ageRemain= 60-age;
    let days= ageRemain*365;
    let weeks= ageRemain*52;
    let mounts= ageRemain*12;
    cosole.log("you have remain"+days+" day's"+weeks+" week's");
}
ageConvertor(22);
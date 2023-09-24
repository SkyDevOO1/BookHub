// import { receiveError } from "./backend/javascript/receiveErr.js";
import { submit_ins_form } from "./backend/javascript/submit-form.js";

const registaction_form = document.forms["inscription"];

registaction_form.addEventListener("submit", submit_ins_form);

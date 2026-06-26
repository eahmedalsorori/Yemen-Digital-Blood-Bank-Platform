SELECT
    patient.firste_name,
    patient.med_name,
    patient.last_name,
    patient.check,
    donors.firste_name,
    donors.med_name,
    donors.last_name, 
    request.id,
    request.h_id,
    request
     request.date_created,
    request.timeattendance,
    hospitals.h_id,
   laboratory.l_id,
    donate_for_patient.d_id,
    donate_for_patient.p_id,
    request.check,
    laboratory.check
FROM
    hospitals,
    laboratory,
    donate_for_patient,
    donors,
    patient,
    doctor,
    request
WHERE
    hospitals.h_id = laboratory.h_id AND 
    laboratory.l_id = donate_for_patient.l_id AND donate_for_patient.d_id = donors.d_id AND donate_for_patient.p_id = patient.p_id AND doctor.l_id = laboratory.l_id;



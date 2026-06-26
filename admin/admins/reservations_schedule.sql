SELECT
    hospitals.h_id,
    hospitals.name,
    laboratory.name,
    patient.firste_name,
    patient.med_name,
    patient.last_name,
    donors.firste_name,
    donors.last_name,
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
    laboratory.l_id = donate_for_patient.l_id AND donate_for_patient.d_id = donors.d_id
     AND donate_for_patient.p_id = patient.p_id AND doctor.l_id = laboratory.l_id AND h_id =2;


    -- code--php






$sql = "SELECT\n"

    . "    hospitals.name,\n"

    . "    laboratory.name,\n"

    . "    patient.firste_name,\n"

    . "    patient.med_name,\n"

    . "    patient.last_name,\n"

    . "    patient.blood_group,\n"

    . "    donors.firste_name,\n"

    . "    donors.med_name,\n"

    . "    donors.last_name,\n"

    . "    donors.blood_group,\n"

    . "    doctor.name,\n"

    . "    doctor.phone,\n"

    . "    request.date_created,\n"

    . "    request.timeattendance,\n"

    . "    hospitals.h_id,\n"

    . "    laboratory.l_id,\n"

    . "    donate_for_patient.d_id,\n"

    . "    donate_for_patient.p_id,\n"

    . "    request.check,\n"

    . "    laboratory.check\n"

    . "FROM\n"

    . "    hospitals,\n"

    . "    laboratory,\n"

    . "    donate_for_patient,\n"

    . "    donors,\n"

    . "    patient,\n"

    . "    doctor,\n"

    . "    request\n"

    . "WHERE\n"

    . "    hospitals.h_id = laboratory.h_id\n"

    . "    AND laboratory.l_id = donate_for_patient.l_id\n"

    . "    AND donate_for_patient.d_id = donors.d_id\n"

    . "    AND donate_for_patient.p_id = patient.p_id\n"

    . "    AND doctor.l_id = laboratory.l_id\n"

    . "    AND hospitals.name LIKE \'%الجمهوري%\';";



PKJJJJJJJJJJJJJJJJJJJJJ


v
include '../../auth/db_connect.php';

if (isset($_GET['donor_name'])) {
    $donor_name = $_GET['donor_name'];
    
    $sql = "SELECT DISTINCT
        hospitals.name AS hospital_name,
        laboratory.name AS laboratory_name,
        patient.firste_name AS patient_first_name,
        patient.med_name AS patient_med_name,
        patient.last_name AS patient_last_name,
        patient.blood_group AS patient_blood_group,
        donors.firste_name AS donor_first_name,
        donors.med_name AS donor_med_name,
        donors.last_name AS donor_last_name,
        donors.blood_group AS donor_blood_group,
        request.date_created,
        request.timeattendance,
        doctor.name AS doctor_name,
        doctor.phone,
        request.check AS request_check,
        laboratory.check AS laboratory_check,
        hospitals.check AS hospital_check
    FROM
        hospitals,
        laboratory,
        donate_for_patient,
        donors,
        patient,
        doctor,
        request
    WHERE
        hospitals.h_id = laboratory.h_id
        AND laboratory.l_id = donate_for_patient.l_id
        AND donate_for_patient.d_id = donors.d_id
        AND donate_for_patient.p_id = patient.p_id
        AND doctor.l_id = laboratory.l_id
        AND (donors.firste_name LIKE '%$donor_name%'
        OR donors.med_name LIKE '%$donor_name%'
        OR donors.last_name LIKE '%$donor_name%');";

    // استعراض النتائج...
}
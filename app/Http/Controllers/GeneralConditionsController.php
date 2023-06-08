<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class GeneralConditionsController extends Controller
{
    public function index()
    {
        $generalConditions = '<h2>GENERAL CONDITIONS<br>
                48. CLASSICAL MUSIC FESTIVAL</h2>

                <p>August 6-August 16, 2023</p>
                <p>The Classical Music Festival is an educational music program prepared and administered by Classical Music Festival/Eisenstädter Sommerakademie, Inc. (the “Classical Music Festival Nonprofit Corporation”) in cooperation with the City of Eisenstadt and the government of Burgenland. Its purpose is to develop an increased knowledge and understanding of music through study, rehearsal and performance of pre-selected repertoire while in residence in Eisenstadt, Austria.</p>
                <ol type="1">
                    <li>The Classical Music Festival Nonprofit Corporation will have made all arrangements for the
                        accommodations and services furnished in connection with the program as described in the brochure, related promotional materials, and on the official website. The right is reserved to make changes in the itinerary with or without notice where deemed necessary or advisable, with the understanding that any additional expenses will be paid by the individual enrollee.</li>
                    <li>The right is reserved to cancel the program prior to departure if the Classical Music Festival Nonprofit Corporation determines that circumstances require such cancellation, in which case full refund of fees paid to the Classical Music Festival Nonprofit Corporation will constitute full settlement with the enrollee.</li>
                    <li>The right is reserved to decline to accept any person as an enrollee in the program, consistent with Classical Music Festival Nonprofit Corporation policy.</li>
                    <li>In the event that any of the services and accommodations described in the brochure, website, or promotional materials are not used due to voluntary or negligent omission by the program enrollee, no refund will be granted. No refund will be made for any unused portion of the program unless agreed to in writing prior to departure. (See also paragraph 9.d.)</li>
                    <li>In the event that the services and accommodations described in the brochure, promotional materials, or website cannot be supplied due to causes beyond the control of the aforementioned agents, reasonable efforts will be made to supply comparable services and accommodations.</li>
                    <li>Neither the Classical Music Festival Nonprofit Corporation, its directors, program staff, employees, or escorts shall be liable for any loss, damage, injury, delay, substitution of equipment, irregularity, or additional expense arising from the acts or omissions of any air carrier, hotels, travel agencies, or ground carrier. Neither shall any of the aforementioned persons be liable for any loss, damage, injury, delay, substitution of equipment, irregularity, or additional expense arising from the acts or omissions of any providers of services or accommodations, or due to strikes, war, civil disturbances, weather, acts of God, quarantines, sickness, government restrictions or regulation, or from any other cause whatsoever. The program enrollee, by signing this statement of conditions, waives any such claim against the aforementioned agencies and persons, and holds such agencies and persons harmless.</li>
                    <li>The agencies and persons enumerated in paragraph 6 above shall not be responsible in any way for loss or damage to the enrollees’ baggage, including musical instruments. Baggage and instrument insurance is strongly recommended.</li>
                    <li>The price of the program is based on tariffs and exchange rates in effect at the time of the printing of the brochure and is subject to change in the event of any change in tariff or exchange rates. The program enrollee acknowledges understanding of the possibility of such change in the price of the program and consents thereto.</li>
                    <li>The enrollee and each person accompanying the enrollee further agree as follows that:
                        <ol type="a">
                            <li>the enrollee is covered by a valid health and accident insurance plan that covers medical and other health care expenses that might be incurred by the enrollee while he or she is out of his or her country of residence, or that the enrollee will obtain such insurance by the time of departure for the program, and will provide complete information about such coverage (including insurance company, policy number, effective dates, and emergency notification procedures) before or upon arrival in Eisenstadt, Austria (world-wide medical emergency assistance insurance, or comparable coverage, is also recommended);</li>
                            <li>The Classical Music Festival Nonprofit Corporation and their directors, coordinators, and employees are released from any and all responsibility and expense resulting from any health or accident problems incurred by the enrollee and each person accompanying the enrollee in transit to or from the Classical Music Festival and during the program;</li>
                            <li>the enrollee will have access to sufficient funds (a minimum of $400 is recommended) over and above the cost of the program to maintain the enrollee and to provide for emergencies while in transit to or from the Classical Music Festival and during the program;</li>
                            <li>the enrollee will not withdraw from the program after June 1, 2023, and that the amount paid for the program is non-refundable after June 1, 2023, except in case of a certifiable emergency stated in writing;</li>
                            <li>The Classical Music Festival Nonprofit Corporation will make reasonable efforts to accommodate enrollees but are not responsible for difficulties resulting from enrollees’ disabilities or special needs;</li>
                            <li>The Classical Music Festival Nonprofit Corporation are not liable for the results of any of the enrollees’ or persons accompanying the enrollees’ actions;</li>
                            <li>the enrollee understands that at this event or related activities, enrollee may be photographed or video recorded. Enrollee agrees to allow his/her photo, video, or film likeness to be used for any legitimate purpose by the festival organizers, event holders, and assigns.</li>
                            <li>the enrollee agrees to accept email communication from the Classical Music Festival for festival related matters including the orientation letters sent by the festival administration. The festival agrees it will not share the enrollee’s email or any personal information to any outside individual or entity.</li>
                            <li>this contract applies, in all its terms and conditions, to any and all family members or other persons who might accompany the enrollee for any portion of the Classical Music Festival;</li>
                        </ol>
                    </li>
                </ol>
                <p>The enrollee and each person accompanying the enrollee has read and understands the conditions set forth in this contract, the brochure, and general communication.</p>
                <p>__________________________________________<br>Participant signature</p>
                <p>__________________________________________<br>Printed name of participant</p>
                <p>_______________________<br>Date </p>';

        return Inertia::render('GeneralConditions', [
            'generalConditions' => $generalConditions
        ]);
    }
}

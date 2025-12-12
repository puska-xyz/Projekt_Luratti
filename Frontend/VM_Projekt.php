<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>UberCloud</title>
<style>
    body {
        font-family: system-ui, sans-serif;
        background: #0f172a;
        color: #e5e7eb;
        margin: 0;
        padding: 16px;
    }

    header {
        position: sticky;
        top: 16px; /* Abstand von oben, wenn sticky */
        z-index: 50;

        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;

        padding: 12px 24px;

        /*background: rgba(255, 255, 255, 0.18);*/
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);

        border-radius: 9999px;
        border: 1px solid rgba(148, 163, 184, 0.4);

        max-height: 20px;
        margin: 0 auto;         /* zentriert */
    }   

    /*
    .logo {
        height: 150px;   
    }
    */
    
    h1 { 
        margin: 0;
        font-size: 1.8rem;
    }

    main {
        max-width: 1100px;
        margin: 20px auto 60px auto;
        padding: 0 20px;
    }

    .grid {
        display: grid;
        grid-template-columns: 2fr 1.5fr;
        gap: 20px;
        margin-bottom: 30px
    }

    .card {
        background: rgba(15, 23, 42, 0.9);
        padding: 18px 20px;
        margin-bottom: 15px;
        border-radius: 14px;
        border: 1px solid #1f2937;
        box-shadow: 0 18px 40px rgba(0, 0, 0, 0.35);
        transition: border-color 0.25s ease, border-width 0.25s ease;
    }

    .card:hover {
        border: 1px solid #22c55e;
    }

    h2 {
        margin-top: 0;
        font-size: 1.2rem;
    }

    label {
        display: block;
        margin: 8px 0 4px 0;
        font-size: 0.9rem;
    }

    input[type="text"],
    select {
        width: 95%;
        padding: 8px 10px;
        border-radius: 8px;
        border: 1px solid #374151;
        background: #020617;
        font-size: 0.9rem;
        color: #e5e7eb;
    }

    input[type="text"]:focus,
    select:focus {
        outline: none;
        border-color: #22c55e;
    }

    button {
        margin-top: 12px;
        padding: 9px 16px;
        border-radius: 999px;
        border: none;
        cursor: pointer;
        background: #22c55e;
        color: #022c22;
        font-weight: 600;
        font-size: 0.9rem;
    }

    button.delete {
        background: #ef4444;
        color: #450a0a;
    }

    button:hover,
    button:focus {
        filter: brightness(1.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.9rem;
    }

    th, td {
        padding: 6px 8px;
        border-bottom: 1px solid #1f2937;
        text-align: left;
    }

    th {
        font-weight: 600;
        color: #9ca3af;
    }

    .preis {
        margin-top: 30px;
        border: 2px solid black;
        border-radius: 10px;
        transition: all 0.5s ease;
        margin-left: 55px;
        width: 1150px;
        height: 100px;
    }

    .summary {
        display: flex;
        justify-content: space-between;
        gap: 10px;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }

    .summary-item {
        font-size: 0.9rem;
    }

    footer {
        text-align: center;
        color: #6b7280;
        font-size: 0.8rem;
        padding-bottom: 20px;
    }
</style>
</head>


<body>
    <header>
        <!-- <img src="Bilder/uber_cloud_logo.webp" alt="Logo" class="logo"> -->
        <h1>UberCloud - Demo (Modul 346)</h1>
    </header>

    <main>
        
    <div class="summary">
            <div class="summary-item">
                <p>Laufende VMs:</p>
            </div>

            <div class="summary-item">
                <p>Monatlicher Gesamtumsatz:</p>
            </div>
        </div>


        <div class="grid">

            <!-- VM anlegen -->
            <div class="card">
                <h2>Virtuelle Maschine mieten</h2>
                
                <form method="post">
                    <label for="vm_name">Name der VM</label>
                    <input type="text" id="vm_name" name="vm_name" placeholder="z.B webserver-01" required>

                    <label for="cpu">CPU (Cores)</label>
                    <select name="cpu" id="cpu" required>
                        <option value="">Bitte wählen</option>
                        <!-- do kann meh au eh foreach loop mache -->
                        <option value="1">1 Cores (5CHF / Monat)</option>
                        <option value="2">2 Cores (5CHF / Monat)</option>
                        <option value="4">4 Cores (5CHF / Monat)</option>
                        <option value="8">8 Cores (5CHF / Monat)</option>
                        <option value="16">16 Cores (5CHF / Monat)</option>
                    </select>

                    <label for="cpu">RAM (GB)</label>
                    <select name="cpu" id="cpu" required>
                        <option value="">Bitte wählen</option>
                        <!-- do kann meh au eh foreach loop mache -->
                        <option value="4">4 GB</option>
                        <option value="8">8 GB</option>
                        <option value="16">16 GB</option>
                        <option value="32">32 GB</option>
                    </select>

                    <label for="cpu">SSD (GB)</label>
                    <select name="cpu" id="cpu" required>
                        <option value="">Bitte wählen</option>
                        <!-- do kann meh au eh foreach loop mache -->
                        <option value="50">50 GB</option>
                        <option value="100">100 GB</option>
                        <option value="250">250 GB</option>
                        <option value="500">500 GB</option>
                    </select>

                    <button type="submit">VM erstellen</button>
                </form>
            </div>

            <!-- VM lösche -->
            <div class="card">
                <h2>Virtuelle Maschine löschen</h2>
                <form method="post">
                    <label for="vm_name_delete">Name der VM</label>
                    <input type="text" id="vm_name_delete" name="vm_name_delete" placeholder="z.B webserver-01" required>

                    <button type="submit" class="delete">VM löschen</button>

                    <p>
                        Hinweis: die vm wird gelöscht!!!!!!!
                    </p>
                </form>
            </div>
        </div>

        <!-- Serverauslastung -->
            <div class="card">
                <h2>Physische Server - Auslastung</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Server</th>
                            <th>CPU (verbraucht / gesamt)</th>
                            <th>RAM (verbraucht / gesamt)</th>
                            <th>SSD (verbraucht / gesamt)</th>
                            <th>Ø Auslastung</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- mit php fülle -->
                    </tbody>
                </table>

                <p>SMALL</p>
                <p>MEDIUM</p>
                <p>BIG</p>
            </div>

            <!-- Liste der VMs -->
            <div class="card">
                <h2>Laufende virtuelle Maschinen</h2>
                
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>CPU</th>
                            <th>RAM</th>
                            <th>SSD</th>
                            <th>Preis / Monat</th>
                        </tr>
                    </thead>
                </table>

                <p>keine vms</p>
            </div>

            <!-- Preis -->
            <div class="card">
                <h2>Preis</h2>
                <p>Gesamtpreis pro Monat: </p>
            </div>
    </main>

    <footer>
        UberCloud
        Erstellt von:
        Luka Ilikj
        Lukas Thommen
        Dani el array_interse
        Basel günterstrasse 5034
    </footer>


</body>
</html>

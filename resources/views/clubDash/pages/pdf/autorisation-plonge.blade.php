<!DOCTYPE html>

<html>

<head>

    <title>AUTORISATION DE PLONGÉE</title>

</head>

<body>

<h1 style="text-align: center; font-weight: bold;">{!! $title ?? '--' !!}</h1>
<p></p>

<p style="font-size: 14px; text-indent: 15px;">Je, soussigné, <span style="font-weight: bold;">{{ $frmpasPresident ?? '--' }}</span>, Président de la
    Fédération
    Royale Marocaine de Plongée et d'Activités Subaquatiques -
    FRMPAS -, atteste par la présente que « <span style="font-weight: bold;">{{ $club ?? '--' }}</span> » représentée par son Président
    <span style="font-weight: bold;">{{ $name ?? '--' }}</span> CIN : <span style="font-weight: bold;">{{ $cin ?? '--' }}</span>,
    ayant son siège <span style="font-weight: bold;">{{ $address ?? '--' }}</span>, et une <span
        style="font-weight: bold;">{{ $legalStructure ?? '--' }} {{ $clubType ?? '--' }}</span>, est
    affiliée à cette Fédération sous le numéro <span style="font-weight: bold;">{{ $clubNumber ?? '--' }}</span></p>
<p style="font-size: 14px; text-indent: 15px;">Par cette affiliation, l’Association précitée adhère automatiquement
    à la Loi n° 30-09 relative à l’éducation physique et aux sports, aux
    Statuts de la FRMPAS ainsi qu’à l'ensemble des règlements de cette
    Fédération, bénéficiant, de ce fait, de l'assurance couvrant ce Club et
    ses Adhérents dûment licenciés contre tout risque d'accident lié à son
    activité.</p>
<p style="font-size: 14px; text-indent: 15px;">Conformément à la loi et aux règlements en vigueur, j’autorise donc,
    par la présente, « <span style="font-weight: bold;">{{ $authorizedClub ?? '--' }}</span> » et l'ensemble de ses membres licenciés de
    la FRMPAS à pratiquer, sur l'ensemble du territoire du Royaume du
    Maroc et pour la saison <span style="font-weight: bold;">{{ $saison ?? '--' }}</span>, la plongée sous-marine ainsi que
    l'ensemble des activités subaquatiques relevant de cette Fédération.</p>
<p style="font-size: 14px; text-indent: 15px;">
    Attestation établie à Casablanca, le {!! $today ?? '--' !!}, pour servir et valoir ce
    que de droit.</p>

<p></p>

<span style="font-size: 14px; font-weight: bold;">Le Président de la FRMPAS</span>
<br>
<span style="font-size: 14px; font-weight: bold;">{{ $frmpasPresident ?? '--' }}</span>

</body>

</html>

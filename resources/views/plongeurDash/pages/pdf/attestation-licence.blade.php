<!DOCTYPE html>

<html>

<head>

    <title>ATTESTATION DE LICENCE</title>

</head>

<body>

<h1 style="text-align: center; font-weight: bold;">{!! $title ?? '--' !!}</h1>
<h1 style="text-align: center; font-weight: bold;">Saison {!! $saison ?? '--' !!}</h1>
<h1 style="text-align: center; font-weight: bold;">N° {!! $number ?? '--' !!}</h1>



<p></p>
<p></p>

<p style="font-size: 16px; text-indent: 15px;">Je, soussigné, <span style="font-weight: bold;">{{ $clubPresident ?? '--' }}</span>, Président de la Fédération Royale
    Marocaine de Plongée et d'Activités Subaquatiques - FRMPAS -,
    atteste par la présente que <span style="font-weight: bold;">« {{ $diver ?? '--' }} »</span>
    est licencé par la Fédération sous le numéro <span style="font-weight: bold;">{!! $number ?? '--' !!}</span>
    est à jour de ces cotisations pour la saison <span style="font-weight: bold;">{{ $saison ?? '--' }}</span>.</p>
<p style="font-size: 16px; text-indent: 15px;">
    Attestation établie à Casablanca, le {!! $today ?? '--' !!}, pour servir et valoir ce
    que de droit.</p>

<p></p>
<p></p>

<span style="font-size: 16px; font-weight: bold;">Le Président de la FRMPAS</span>
<br>
<span style="font-size: 16px; font-weight: bold;">{{ $clubPresident ?? '--' }}</span>

</body>

</html>
